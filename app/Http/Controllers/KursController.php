<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormAplicantRequest;
use App\Mail\ApplicationForCourse;
use App\Mail\ContactForm;
use App\Mail\KontaktForma;
use App\Mail\PrijavaZaKurs;

class KursController extends Controller {

	public function getPage($lang = false, $page = false) {
		$lang = ('sr' == $lang) ? 'sr' : 'en';
		if ('en' == $page || 'sr' == $page) {
			$page = 'index';
		}
		if ($lang && $page) {
			return view($lang . '.' . $page);
		} elseif ($lang && !$page) {
			return view($lang . '.index');
		} else {
			return view('sr.index');
		}
	}

	public function getStaticPage($lang = false, $page = false) {
		$page = $page ? $page : 'index';
		$lang = $lang ? $lang : 'sr';
		return view($lang . '.' . $page);
	}

	public function sendmail(FormAplicantRequest $request) {
		$owner1 = config('jakho.owner1');
		$owner2 = config('jakho.owner2');
		$owner = config('jakho.owner');
		$email = $request->input('email');
		$msg = $request->input('message');
		$phone = $request->input('phone');
		$user = $request->input('name');
		//dd($phone);
		if ($request->input('type') == 'sr-kontakt') {
			$userResponse = [
				'msg' => 'Hvala vam na izdvojenom vremenu. Bićete kontaktirani uskoro!',
				'user' => $user,
				'email' => $email,
				'phone' => $phone,
				'lang' => 'sr',
				'owner' => 2,
			];
			$ownerResponse = [
				'user' => $user,
				'email' => $email,
				'lang' => 'sr',
				'msg' => $msg,
				'phone' => $phone,
				'owner' => 1,
			];
			\Mail::to($email)->send(new KontaktForma($userResponse));
			\Mail::to($owner1)->send(new KontaktForma($ownerResponse));
			\Mail::to($owner)->send(new KontaktForma($ownerResponse));
			\Mail::to($owner2)->send(new KontaktForma($ownerResponse));
			return redirect()->back()->with('success', 'Hvala vam na izdvojenom vremenu. Bićete kontaktirani uskoro.');
		} elseif ($request->input('type') == 'sr-prijava') {
			$userResponse = [
				'msg' => 'Hvala vam na prijavi. Bićete kontaktirani uskoro.',
				'user' => $user,
				'email' => $email,
				'phone' => $phone,
				'lang' => 'sr',
				'owner' => 2,
			];
			$ownerResponse = [
				'user' => $user,
				'email' => $email,
				'lang' => 'sr',
				'msg' => $msg,
				'phone' => $phone,
				'owner' => 1,
			];
			//dd($ownerResponse);
			\Mail::to($email)->send(new PrijavaZaKurs($userResponse));
			\Mail::to($owner)->send(new KontaktForma($ownerResponse));
			\Mail::to($owner1)->send(new PrijavaZaKurs($ownerResponse));
			\Mail::to($owner2)->send(new PrijavaZaKurs($ownerResponse));
			return redirect()->back()->with('success', 'Hvala vam na prijavi. Bićete kontaktirani uskoro.');
		} elseif ($request->input('type') == 'en-application') {
			$userResponse = [
				'msg' => 'Thank you for applying. We will contact you shortly.',
				'user' => $user,
				'email' => $email,
				'phone' => $phone,
				'lang' => 'en',
				'owner' => 2,
			];
			$ownerResponse = [
				'user' => $user,
				'email' => $email,
				'phone' => $phone,
				'lang' => 'en',
				'msg' => $msg,
				'phone' => $phone,
				'owner' => 1,
			];
			\Mail::to($email)->send(new ApplicationForCourse($userResponse));
			\Mail::to($owner)->send(new KontaktForma($ownerResponse));
			\Mail::to($owner1)->send(new ApplicationForCourse($ownerResponse));
			\Mail::to($owner2)->send(new ApplicationForCourse($ownerResponse));
			return redirect()->back()->with('success', 'Thank you for applying. We will contact you shortly.');
		} else {
			$userResponse = [
				'msg' => 'Thank you for your time. We will contact you shortly.',
				'user' => $user,
				'email' => $email,
				'phone' => $phone,
				'lang' => 'en',
				'owner' => 2,
			];
			$ownerResponse = [
				'user' => $user,
				'email' => $email,
				'lang' => 'en',
				'msg' => $msg,
				'phone' => $phone,
				'owner' => 1,
			];
			\Mail::to($email)->send(new ContactForm($userResponse));
			\Mail::to($owner)->send(new KontaktForma($ownerResponse));
			\Mail::to($owner1)->send(new ContactForm($ownerResponse));
			\Mail::to($owner2)->send(new ContactForm($ownerResponse));
			return redirect()->back()->with('success', 'Thank you for your time. We will contact you shortly.');
		}
	}
}
