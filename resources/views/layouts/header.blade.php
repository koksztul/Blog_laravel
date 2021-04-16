<?php
use Illuminate\Support\Facades\URL;
?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
    @if ((Request::path() != '/') && (Request::path() != 'posts') && (Request::path() != 'post/*'))
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    @endif
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/posts" class="nav-link">Posts</a>
      </li>
      @if (Auth::user())
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/dashboard" class="nav-link">Dashboard</a>
      </li>
      @endif
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    @if (Auth::user())
    <li class="nav-item d-none d-sm-inline-block">
      <a href="" class="nav-link">{{Auth::user()->name}}</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{ url('/logout') }}" class="nav-link">Logout</a>
    </li>
    @else
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/login" class="nav-link">Login</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/register" class="nav-link">Register</a>
      </li>
    @endif
    @if ((Request::path() != '/') && (Request::path() != 'posts'))
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    @endif
    </ul>
  </nav>