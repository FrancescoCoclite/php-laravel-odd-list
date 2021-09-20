@extends('layouts.app')

@section('content')
    <div class="container">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li> 
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.posts.update',$post->id)}}" method="post">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="titolo" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="titolo" name="title" value="{{ $post->title}}">
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Categoria</label>
                <select name="category_id" id="category" class="form-control">
                <option value="">- Select a category -</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}"
                            @if($category->id == old('category_id', $post->category_id)) selected
                            @endif>
                            {{$category->name}}
                        </option>
                    @endforeach
                </select>
            </div>
            
            
            
            <div class="mb-3">
                <label for="desc" class="form-label">Descrizione</label>
                <textarea class="form-control" name="content" id="desc" cols="30" rows="10">{{ $post->content}}</textarea>
            </div>
            
            <div>
                <h5 class="mt-2">Tag</h5>
                @foreach($tags as $tag)
                <input id="tag{{$loop->iteration}}" type="checkbox" name="tags[]"class="ml-2" value="{{$tag->id}}"
                
                @if($post->tags->contains( $tag->id )) 
                checked 
                @elseif(in_array($tag->id, old('tags', [])))
                checked 
                @endif
                >
                <label for="tag{{$loop->iteration}}">{{ $tag->name }}</label>
                @endforeach
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection