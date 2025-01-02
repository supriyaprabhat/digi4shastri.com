@extends('layouts.base')

@section('title') 
    Digi4shastri
@endsection


@section('contents')
    <!-- section1 -->

    @include('pages.inc.heroSection')

    @include('pages.inc.wcSection')
    
    @include('pages.inc.getCertSection')

    @include('pages.inc.ourProgramsSection')

    @include('pages.inc.scSection')

    @include('pages.inc.daSection')

    @include('pages.inc.gcSection')

    @include('pages.inc.tsSection')

@endsection