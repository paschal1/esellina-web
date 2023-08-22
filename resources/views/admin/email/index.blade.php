@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Send Email to Recipients</h2>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('email.send') }}">
            @csrf
            <div class="form-group">
                <label for="recipients">Recipient Emails</label>
                <textarea name="recipients" class="form-control" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" class="form-control">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" class="form-control" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Emails</button>
        </form>
    </div>
@endsection
