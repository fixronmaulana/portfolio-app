@extends('layouts.admin.base')
@section('content')
    <section class="setting" id="setting">
        <div class="setting-wrapper">
            @include('layouts.admin.nav')
            <div class="setting_content">
                <section class="about" id="about">
                    <div class="titlebar">
                        <h1>Medias</h1>
                    </div>
                    @include('includes.flash_message')
                    <div class="card-wrappere">
                        <div class="card">
                            <h2>Social media</h2>
                            <div class="social_table-heading">
                                <p>Link</p>
                                <p>Icon</p>
                                <p></p>
                            </div>
                            <!-- item 1 -->
                            @foreach ($medias as $media)
                                <div class="social_table-items">
                                    <p>{{ $media->link }}</p>
                                    <button class="service_table-icon">
                                        <i class="{{ $media->icon }}"></i>
                                    </button>
                                    <form method="POST" action="{{ route('medias.destroy', $media->id) }}">
                                        {{ method_field('DELETE') }}
                                        @csrf
                                        <button class="danger" type="submit"
                                            onClick="return confirm(&quot;Confirm delete?&quot;)">
                                            delete
                                        </button>
                                    </form>
                                </div>
                            @endforeach
                            <br>
                            @include('admin.medias.form')
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection
