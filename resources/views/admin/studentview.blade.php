@extends('layout')

@php
	function convert_department($value){
        
        $values=[
             1=>'CSE',
             2=>'BBA',
             3=>'EEE',
             4=>'ECE',
        ];
        return $values[$value];
	}
@endphp

@section('content')

	
          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-4">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="{{ URL::to($student_description_profile->student_image) }}" alt="">
                  <p class="name">{{ $student_description_profile->student_name }}</p>
                  <p class="designation">{{ $student_description_profile->student_roll }}</p>
                  <a class="email" href="#">{{ $student_description_profile->student_email }}</a>
                  <a class="number" href="#">{{ $student_description_profile->student_phone }}</a>
                </div>
              </div>
              <div class="card mb-4">
                <div class="card-body overview">
                  <ul class="achivements">
                    <li><p>34</p><p>Projects</p></li>
                    <li><p>23</p><p>Task</p></li>
                    <li><p>29</p><p>Completed</p></li>
                  </ul>
                  <div class="wrapper about-user">
                    <ul class="achivements">
                    <h2 style="color:maroon; font-family: cursive; font-weight: bolder; ">Daffodil International Institute</h2>
                  </ul>
                  </div>
                  <div class="info-links">
                    <a class="website" >
                      <i class="icon-globe icon">Fathers Name  :</i>
                      <span>{{ $student_description_profile->student_fathersname }}</span>
                    </a>
                    <a class="social-link" >
                      <i class="icon-social-facebook icon">Mothers Name :</i>
                      <span>{{ $student_description_profile->student_mothersname }}</span>
                    </a>
                    
                    <a class="social-link" >
                      <i class="icon-social-facebook icon">Student Address:</i>
                      <span>{{ $student_description_profile->student_mothersname }}</span>
                    </a>
                    <a class="social-link" >
                      <i class="icon-social-facebook icon">Student Department :</i>
                      <span>{{convert_department($student_description_profile->student_department) }}</span>
                    </a>
                    <a class="social-link" >
                      <i class="icon-social-facebook icon">Admission Year :</i>
                      <span>{{ $student_description_profile->student_admissionyear }}</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
        

@endsection