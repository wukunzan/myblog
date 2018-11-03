@extends('layouts.app')

@section('title', isset($category)?$category->title.' - 吴坤赞博客 ':null)

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-8 post-list">
            @if (isset($category) )
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">{{ $category->title }} </a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $category->description }}</li>
                    </ol>
                </nav>
            @endif
                @if (isset($slug) )
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" style="color: #F46466;">标签名称 ：</li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $slug }}</li>
                        </ol>
                    </nav>
                @endif
            {{-- 话题列表 --}}
            @include('posts._post_list', ['posts' => $posts])
        </div>

        <div class="col-lg-4 sidebar">
            @include('posts._sidebar')
        </div>
    </div>

@endsection