<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

class FormAplicantRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		if ($this->input('type') == 'sr-kontakt') {
			return [
				'name' => 'required|min:2',
				'email' => 'required|email',
				//'g-recaptcha-response' => 'required|min:1',
				'phone' => 'required|max:100',
				'message' => 'required|min:5',
			];
		} elseif ($this->input('type') == 'sr-prijava') {
			return [
				'name' => 'required|min:2',
				'email' => 'required|email',
				//'g-recaptcha-response' => 'required|min:1',
				'phone' => 'required|max:100',
				'message' => 'required|min:5',
			];
		} elseif ($this->input('type') == 'en-application') {
			return [
				'name' => 'required|min:2',
				'email' => 'required|email',
				//'g-recaptcha-response' => 'required|min:1',
				'phone' => 'required|max:100',
				'message' => 'required|min:5',
			];
		} else {
			return [
				'name' => 'required|min:2',
				'email' => 'required|email',
				//'g-recaptcha-response' => 'required|min:1',
				'phone' => 'required|max:100',
				'message' => 'required|min:5',
			];
		}
	}

	public function messages() {
		if ($this->input('type') == 'sr-kontakt') {
			return [
				'name.required' => 'Polje Ime i Prezime je obavezno!',
				'name.min' => 'Polje Ime i Prezime mora imati minimum 2 karaktera!',
				'email.required' => 'Polje E-mail je obavezno!',
				'email.email' => 'Unesite ispravan E-mail nalog!',
				'phone.required' => 'Polje Telefon je obavezno!',
				'phone.max' => 'Polje Telefon može imati maximum 15 karaktera!',
				'message.min' => 'Polje Poruka može imati maximum 150 karaktera!',
			];
		} elseif ($this->input('type') == 'sr-prijava') {
			return [
				'name.required' => 'Polje Ime i Prezime je obavezno!',
				'name.min' => 'Polje Ime i Prezime mora imati minimum 2 karaktera!',
				'email.required' => 'Polje E-mail je obavezno!',
				'email.email' => 'Unesite ispravan E-mail nalog!',
				'phone.required' => 'Polje Telefon je obavezno!',
				'phone.max' => 'Polje Telefon može imati maximum 15 karaktera!',
				'message.min' => 'Polje Poruka može imati maximum 150 karaktera!',
			];
		} elseif ($this->input('type') == 'en-application') {
			return [
				'name.required' => 'First Name and Last Name field is required!',
				'name.min' => 'First Name and Last Name must be at least :min!',
				'email.required' => 'E-mail field is required!',
				'email.email' => 'E-mail must be a valid email address!',
				'phone.required' => 'Phone field is required!',
				'phone.max' => 'Phone field may not be greater than :max!',
				'message.min' => 'Message field must be at least :min!',
			];
		} elseif ($this->input('type') == 'en-contact') {
			return [
				'name.required' => 'First Name and Last Name field is required!',
				'name.min' => 'First Name and Last Name must be at least :min!',
				'email.required' => 'E-mail field is required!',
				'email.email' => 'E-mail must be a valid email address!',
				'phone.required' => 'Phone field is required!',
				'phone.max' => 'Phone field may not be greater than :max!',
				'message.min' => 'Message field must be at least :min!',
			];
		}
	}

/**
 * Get the proper failed validation response for the request.
 *
 * @param  array  $errors
 * @return \Symfony\Component\HttpFoundation\Response
 */
	public function response(array $errors) {
		if (($this->ajax() && !$this->pjax()) || $this->wantsJson()) {
			return new JsonResponse(compact('errors'));
		}

		return $this->redirector->to('/#formv')
			->withInput($this->except($this->dontFlash))
			->withErrors($errors, $this->errorBag);
	}
}
