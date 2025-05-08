@extends('layouts.app')

@section('content')
{{-- Debug Section --}}
@if(isset($error))
<div class="container mt-2 mb-4">
    <div class="alert alert-danger">
        <h5>Error:</h5>
        <p>{{ $error }}</p>
    </div>
</div>
@endif

<div class="container py-5">
    <!-- Header Section -->
    <div class="row mb-5">
        <div class="col-lg-8 mx-auto text-center">
            <h2 class="fw-bold">Testimoni Pengunjung</h2>
            <p class="text-muted lead">Apa kata mereka tentang layanan kami</p>
        </div>
    </div>

    <!-- Testimonial List -->
    <div class="row g-4">
        @forelse($testimonials as $testimonial)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <!-- Media Content (Video atau Gambar) -->
                    @if(isset($testimonial->media_type) && $testimonial->media_type == 'video')
                        <div class="ratio ratio-16x9">
                            <iframe 
                                src="{{ str_contains($testimonial->video_url, 'watch?v=') 
                                    ? 'https://www.youtube.com/embed/' . \Illuminate\Support\Str::after($testimonial->video_url, 'v=') 
                                    : $testimonial->video_url }}" 
                                title="Testimoni Video" 
                                allowfullscreen>
                            </iframe>
                        </div>
                    @elseif(isset($testimonial->media_type) && $testimonial->media_type == 'image')
                        <img src="{{ asset('live/assets/img/' . $testimonial->image) }}" 
                             class="card-img-top" 
                             alt="Testimoni Image"
                             style="height: 500px; object-fit: cover;">
                    @endif

                    <div class="card-body">
                        <div class="mb-2">
                                    <span class="text-warning"></span>
                                    <span class="text-warning"></span>
                                    <span class="text-warning"></span>
                        </div>
                        
                        <!-- Testimonial Message -->
                        <p class="card-text mb-4">{{ $testimonial->message }}</p>
                        
                        <!-- User Info -->
                        <div class="d-flex align-items-center">
                            @if(isset($testimonial->photo) && $testimonial->photo)
                                <img src="{{ asset('storage/' . $testimonial->photo) }}" 
                                     alt="{{ $testimonial->name }}" 
                                     class="rounded-circle me-3" 
                                     width="60" height="60" 
                                     style="object-fit: cover;">
                            @else
                                <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3" 
                                     style="width: 60px; height: 60px;">
                                    <span class="fs-4">{{ substr($testimonial->name, 0, 1) }}</span>
                                </div>
                            @endif
                            
                            <div>
                                <h5 class="mb-0 fw-bold">{{ $testimonial->name }}</h5>
                                <p class="text-muted mb-0 small">
                                    @if(isset($testimonial->created_at))
                                        @if(is_string($testimonial->created_at))
                                            {{ \Carbon\Carbon::parse($testimonial->created_at)->format('d M Y') }}
                                        @else
                                            {{ $testimonial->created_at->format('d M Y') }}
                                        @endif
                                    @else
                                        Unknown Date
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info text-center py-4">
                    <h5>Belum ada testimoni</h5>
                    <p class="mb-0">Belum ada testimoni yang tersedia saat ini.</p>
                </div>
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    @if(method_exists($testimonials, 'links'))
    <div class="mt-5 d-flex justify-content-center">
        {{ $testimonials->links() }}
    </div>
    @endif
</div>

<style>
    .card {
        transition: all 0.3s ease;
        border-radius: 0.5rem;
        overflow: hidden;
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
    }
    
    /* Video container styles */
    .ratio-16x9 {
        position: relative;
        width: 100%;
        padding-top: 56.25%; /* 16:9 Aspect Ratio */
    }
    
    .ratio-16x9 iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }
</style>
@endsection