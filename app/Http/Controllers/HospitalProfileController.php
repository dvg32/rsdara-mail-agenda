<?php

namespace App\Http\Controllers;

use App\Models\mail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\hospital_profile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\technical_instruction;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Storehospital_profileRequest;
use App\Http\Requests\Updatehospital_profileRequest;
use Illuminate\Support\Facades\Mail as FacadesMail;

class HospitalProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $keyword = $request->input('searchJuknis');
        if ($keyword) {
            $juknis = technical_instruction::where(function ($query) use ($keyword) {
                $query->where('judul_juknis', 'like', "%$keyword%")->orWhere('waktu_dibuat', 'like', "%$keyword%");
            })->get();
        } else {
            $juknis = technical_instruction::latest()->filter()->paginate(25);
        }

        $year = Carbon::now()->format('Y');
        $monthlyData = mail::select(DB::raw('MONTH(mail_date) as month'), DB::raw('COUNT(*) as count'), 'mail_type')
            ->whereYear('mail_date', $year)
            ->groupBy(DB::raw('MONTH(mail_date)'), 'mail_type')
            ->get();
        return view('HospitalProfile.HospitalProfileIndex',[
            'allMail' => mail::orderBy('mail_date', 'desc')->paginate(100),
            'mailCount' =>Mail::whereYear('mail_date', $year)->count(),
            'MailIn' => Mail::where('mail_type', 1)->whereYear('mail_date', $year)->count(),
            'MailOut' => Mail::where('mail_type', 2)->whereYear('mail_date', $year)->count(),
            'monthlyData' => $monthlyData,
            'graph_year' => $year,
            // 'technical_instruction' => technical_instruction::latest()->filter()->paginate(25)
            'technical_instruction' => $juknis,
        ]);
    }

    // public function viewJuknis(Request $request)
    // {
    //     $keyword = $request->input('searchJuknis');
    //     if ($keyword) {
    //         $juknis = technical_instruction::where(function ($query) use ($keyword) {
    //             $query->where('judul_juknis', 'like', "%$keyword%")->orWhere('waktu_dibuat', 'like', "%$keyword%");
    //         })->get();
    //     } else {
    //         $juknis = technical_instruction::latest()->get();
    //     }

    //     return view('HospitalProfile.technical_instruction', compact('juknis'));
    // }

    public function supervisorIndex()
    {
        $year = Carbon::now()->format('Y');
        $monthlyData = mail::select(DB::raw('MONTH(mail_date) as month'), DB::raw('COUNT(*) as count'), 'mail_type')
            ->whereYear('mail_date', $year)
            ->groupBy(DB::raw('MONTH(mail_date)'), 'mail_type')
            ->get();
        return view('HospitalProfile.SupervisorIndex',[
            'allMail' => mail::orderBy('mail_date', 'desc')->paginate(100),
            'mailCount' =>Mail::whereYear('mail_date', $year)->count(),
            'MailIn' => Mail::where('mail_type', 1)->whereYear('mail_date', $year)->count(),
            'MailOut' => Mail::where('mail_type', 2)->whereYear('mail_date', $year)->count(),
            'monthlyData' => $monthlyData,
            'graph_year' => $year,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function incomingMail(Request $request)
    {
        // return view('IncomingMail.IncomingMail', [
        //     'Mail' => mail::where('mail_type', 1)->orderBy('mail_date', 'desc')->get(),
        // ]);

        $keyword = $request->input('searchIncomingMail');
        if ($keyword) {
            $Mail = mail::where('mail_type', '=', '1')->where(function($query) use ($keyword) {
                $query->where('mail_from', 'like', "%$keyword%")->orWhere('mail_subject', 'like', "%$keyword%")->orWhere('mail_number', 'like', "%$keyword%");
            })->get();
        } else {
            $Mail = mail::where('mail_type', 1)->orderBy('mail_date', 'desc')->get();
        }

        return view('IncomingMail.IncomingMail', compact('Mail'));
    }

    public function outgoingMail(Request $request)
    {
        // return view('OutgoingMail.OutgoingMail', [
        //     'Mail' => mail::where('mail_type', 2)->orderBy('mail_date', 'desc')->get(),
        // ]);

        $keyword = $request->input('searchOutgoingMail');
        if ($keyword) {
            $Mail = mail::where('mail_type', '1')->where(function($query) use ($keyword) {
                $query->where('mail_from', 'like', "%$keyword%")->orWhere('mail_subject', 'like', "%$keyword%")->orWhere('mail_number', 'like', "%$keyword%");
            })->get();
        } else {
            $Mail = mail::where('mail_type', 1)->orderBy('mail_date', 'desc')->get();
        }

        return view('OutgoingMail.OutgoingMail', compact('Mail'));
    }

    public function addJuknis(Request $requst)
    {
        $validateJuknis = $requst->validate([
            'judul_juknis' => 'required',
            'file_upload' => 'required',
            'waktu_dibuat' => 'required',
        ]);
        $validateJuknis['employee_id'] = Auth()->user()->employee_id;
        $validateJuknis['status'] = 1;
        technical_instruction::create($validateJuknis);
        if ($validateJuknis) {
            Alert::success('Juknis Berhasil Di tambahkan');
        }
        return back();
    }




}
