@extends('layouts.app')
@section('content')
<div class="wrapper">


    <div class="container hero-contacts">
        <h1>TEXT</h1>
        <p>Paragraf</p>
        <img src="https://digsrome.org/wp-content/uploads/2020/02/contact-us-1024x810.jpg" alt="">
    </div>


    <div class="feedback">
        <div class="container">
            <h2>Say Hello</h2>
            <p>Lorem Ipsum is simply dummy text of the printing .</p>

            <form>
                <div class="inline">
                    <div>
                        <lable>First Name</lable>
                        <input type="text">
                    </div>
                    <div>
                        <lable>Last Name</lable>
                        <input type="text">
                    </div>
                </div>

                <lable>Email Address</lable>
                <input type="email">

                <lable>Message</lable>
                <textarea class="one-line"></textarea>

                <button type="button">Get in touch</button>

            </form>
        </div>
        </div>
        </div>
@endsection



