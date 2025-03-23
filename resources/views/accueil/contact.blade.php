@extends('base')
@section('title', 'Contact')

@section('content')
<link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<div class="container mt-5">
    <div class="row mt-4 d-flex align-items-stretch" style="min-height: 600px;">
        <div class="col-md-6 d-flex align-items-stretch">
            <div class="contact-container flex-fill" style="background-color: #74c1d2; padding: 40px; border-radius: 8px; text-align: center; width: 100%; display: flex; flex-direction: column; justify-content: center; min-height: 600px;">
                <h2 style="color: #023047; font-weight: bold;">Contact Us</h2>

                <!-- Affichage du message de succès -->
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Formulaire de contact -->
                <form action="{{ url('/contact') }}" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Enter your Name" required 
                        style="width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #ccc;">
                    
                    <input type="email" name="email" placeholder="Enter a valid email address" required 
                        style="width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #ccc;">
                    
                    <textarea name="message" placeholder="Your Message" rows="5" required 
                        style="width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #ccc;"></textarea>
                    
                    <button type="submit" 
                        style="background-color: #023047; color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px;">
                        SUBMIT
                    </button>
                </form>
            </div>
        </div>
        <div class="col-md-6 d-flex align-items-stretch">
            <div style="background: white; padding: 10px; border-radius: 8px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); width: 100%; min-height: 600px; display: flex; align-items: center; justify-content: center;">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.986654148016!2d-5.003393724665647!3d34.0377578197559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd9f8b2f126c6b1f%3A0x363dabff5b8cbe80!2sAdresse%20Sp%C3%A9cifique%20%C3%A0%20F%C3%A8s%2C%20Maroc!5e0!3m2!1sfr!2sma!4v1710000000000" 
                    width="100%" 
                    height="100%" 
                    style="border: 1px solid #ccc; border-radius: 8px; min-height: 580px;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
</div>
@endsection
