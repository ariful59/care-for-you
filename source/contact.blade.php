---
image: /assets/images/contact-bg.jpg
title: যোগাযোগ
subtitle: আপনার যদি কোন প্রশ্ন থাকে ??
---

@extends('_layouts.page')

@section('content')
    <p>যদি কোন প্রশ্ন থাকে তবে সাচ্ছদে করে ফেলেন । আর কোন ভুল অথবা উপদেশ থাকলে সাথে সাথে আমাদের জানায়ে ধন্য করবেন </p>
    <form method="POST" action="https://formspree.io/{{ $page->email }}">
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>নাম</label>
                <input type="text" class="form-control" placeholder="নাম" name="name" id="name" required>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>ইমেইল ঠিকানা</label>
                <input type="email" class="form-control" placeholder="ইমেইল ঠিকানা" name="email" id="email" required>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>ম্যাসেজ</label>
                <textarea rows="5" class="form-control" placeholder="ম্যাসেজ" name="message" id="message" required></textarea>
            </div>
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">পাঠিয়ে দিন</button>
        </div>
        <input type="text" name="_gotcha" style="display:none" />
    </form>
@endsection