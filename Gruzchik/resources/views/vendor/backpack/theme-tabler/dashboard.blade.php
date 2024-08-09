@extends(backpack_view('blank'))

@php

    \Backpack\CRUD\app\Library\Widget::add()
    ->to('before_content')
    ->type('div')
    ->class('row mt-3')
    ->content([
            \Backpack\CRUD\app\Library\Widget::make()
        ->type('progress')
        ->class('card mb-3')
        ->statusBorder('start')
        ->accentColor('success')
        ->ribbon(['top', 'la-user'])
        ->value('250')
        ->descriptiop('Registered users')
        ->progress(100*(int)239 / 1000)
        ->hint(1000 - 239 .' more until next milestone'),
            \Backpack\CRUD\app\Library\Widget::make()
        ->type('progress')
        ->class('card mb-3')
        ->statusBorder('start')
        ->accentColor('warning')
        ->ribbon(['top', 'la-user'])
        ->value('239')
        ->descriptiop('Registered users')
        ->progress(100*(int)239 / 1000)
        ->hint(1000 - 239 .' more until next milestone'),
            \Backpack\CRUD\app\Library\Widget::make()
        ->type('progress')
        ->class('card mb-3')
        ->statusBorder('start')
        ->accentColor('danger')
        ->ribbon(['top', 'la-user'])
        ->value('200')
        ->descriptiop('Registered users')
        ->progress(100*(int)239 / 1000)
        ->hint(1000 - 239 .' more until next milestone'),
        \Backpack\CRUD\app\Library\Widget::make()
        ->type('progress')
        ->class('card mb-3')
        ->statusBorder('start')
        ->accentColor('primary')
        ->ribbon(['top', 'la-user'])
        ->value('150')
        ->descriptiop('Registered users')
        ->progress(100*(int)239 / 1000)
        ->hint(1000 - 239 .' more until next milestone'),
])
@endphp

@section('content')
        <div class="col-md-12 col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tasks</h3>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter">
                        <tbody><tr>
                            <td class="w-1 pe-0">
                                <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" checked="">
                            </td>
                            <td class="w-100">
                                <a href="#" class="text-reset">Extend the data model.</a>
                            </td>
                            <td class="text-nowrap text-secondary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path><path d="M16 3v4"></path><path d="M8 3v4"></path><path d="M4 11h16"></path><path d="M11 15h1"></path><path d="M12 15v3"></path></svg>
                                August 05, 2021
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                                    2/7
                                </a>
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 9h8"></path><path d="M8 13h6"></path><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path></svg>
                                    3</a>
                            </td>
                            <td>
                                <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-1 pe-0">
                                <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task">
                            </td>
                            <td class="w-100">
                                <a href="#" class="text-reset">Verify the event flow.</a>
                            </td>
                            <td class="text-nowrap text-secondary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path><path d="M16 3v4"></path><path d="M8 3v4"></path><path d="M4 11h16"></path><path d="M11 15h1"></path><path d="M12 15v3"></path></svg>
                                January 01, 2019
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                                    3/10
                                </a>
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 9h8"></path><path d="M8 13h6"></path><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path></svg>
                                    6</a>
                            </td>
                            <td>
                                <span class="avatar avatar-sm">JL</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-1 pe-0">
                                <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task">
                            </td>
                            <td class="w-100">
                                <a href="#" class="text-reset">Database backup and maintenance</a>
                            </td>
                            <td class="text-nowrap text-secondary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path><path d="M16 3v4"></path><path d="M8 3v4"></path><path d="M4 11h16"></path><path d="M11 15h1"></path><path d="M12 15v3"></path></svg>
                                December 28, 2018
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                                    0/6
                                </a>
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 9h8"></path><path d="M8 13h6"></path><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path></svg>
                                    1</a>
                            </td>
                            <td>
                                <span class="avatar avatar-sm" style="background-image: url(./static/avatars/002m.jpg)"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-1 pe-0">
                                <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" checked="">
                            </td>
                            <td class="w-100">
                                <a href="#" class="text-reset">Identify the implementation team.</a>
                            </td>
                            <td class="text-nowrap text-secondary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path><path d="M16 3v4"></path><path d="M8 3v4"></path><path d="M4 11h16"></path><path d="M11 15h1"></path><path d="M12 15v3"></path></svg>
                                November 11, 2020
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                                    6/10
                                </a>
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 9h8"></path><path d="M8 13h6"></path><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path></svg>
                                    12</a>
                            </td>
                            <td>
                                <span class="avatar avatar-sm" style="background-image: url(./static/avatars/003m.jpg)"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-1 pe-0">
                                <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task">
                            </td>
                            <td class="w-100">
                                <a href="#" class="text-reset">Define users and workflow</a>
                            </td>
                            <td class="text-nowrap text-secondary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path><path d="M16 3v4"></path><path d="M8 3v4"></path><path d="M4 11h16"></path><path d="M11 15h1"></path><path d="M12 15v3"></path></svg>
                                November 14, 2021
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                                    3/7
                                </a>
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 9h8"></path><path d="M8 13h6"></path><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path></svg>
                                    5</a>
                            </td>
                            <td>
                                <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000f.jpg)"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-1 pe-0">
                                <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" checked="">
                            </td>
                            <td class="w-100">
                                <a href="#" class="text-reset">Check Pull Requests</a>
                            </td>
                            <td class="text-nowrap text-secondary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path><path d="M16 3v4"></path><path d="M8 3v4"></path><path d="M4 11h16"></path><path d="M11 15h1"></path><path d="M12 15v3"></path></svg>
                                February 11, 2021
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                                    2/9
                                </a>
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 9h8"></path><path d="M8 13h6"></path><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path></svg>
                                    3</a>
                            </td>
                            <td>
                                <span class="avatar avatar-sm" style="background-image: url(./static/avatars/001f.jpg)"></span>
                            </td>
                        </tr>
                        </tbody></table>
                </div>
            </div>
        </div>
@endsection
