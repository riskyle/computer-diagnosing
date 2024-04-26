@extends('layouts.main')

<header class="header" id="header">
    <nav class="  navbar navbar-expand-lg navbar-light bg-secondary bg-gradient">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item ">
                <a class="nav-link logo" href="{{ route('dashboard') }}"><img src="{{ asset('image/logos.png') }}"
                        width="70" height="50" alt=""> </a>
            </li>
        </ul>
        <div class="container">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 logos">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('device') }}"><i class="fas fa-tools"></i> Devices</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ request()->headers->get('referer') }}"><i
                            class="fas fa-tools"></i>Issues</a>
                </li> --}}
            </ul>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile.edit') }}"><i class="fas fa-user"></i> Profile</a>
                    </li>

                    <li class="nav-item ">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();"><i
                                    class="fas fa-sign-out-alt"></i> Logout</a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="header_toggle">
        <i class='bx bx-menu' id="header-toggle"></i>
    </div>

    {{-- <span class=""><img src="{{ asset('img/logo-no-bg.png') }}" width="120px" height="50px" alt=""
            srcset=""></span>
    <li class="nav-item dropdown">
        <a class="dropdown-toggle" data-bs-toggle="dropdown">
            {{ Auth::user()->student->lastname }}, {{ Auth::user()->student->firstname }} |
            {{ Auth::user()->role->type }}
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ url('/profile') }}">My info</a></li>
            <li>
                <form class="dropdown-item" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    <button class="bg-transparent border-0" type="submit">Logout</button>
                </form>
            </li>
            {{-- <li><a class="dropdown-item" href="{{ route('session.destroy') }}">Logout</a></li> --}}
    {{-- </ul>
    </li> --}}

</header>
