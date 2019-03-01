@extends('layouts.app') 

@section('content') 

<a href="posts/create">+ ADD POSTS</a>
<table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Title</td>
          <td>Category</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->category}}</td>
            <td><a href="{{ route('posts.show', $post->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form onclick="return confirm('Are you sure?')" action="{{ route('posts.destroy', $post->id)}}" method="post">
                    {{csrf_field()}}
                    {{ method_field('DELETE') }}
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                {{-- <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{route('posts.destroy', $post->id)}}"><i class="fa fa-trash"></i>Delete</a> --}}
            </td>
            <td>
            <a href="{{ route('posts.show', $post->id)}}" class="btn btn-primary">Show</a>
                {{-- <form action="{{ route('posts.show', $post->id)}}" method="get">
                    
                   <button class="btn btn-danger" type="submit">Show</button>
                </form> --}}
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <div style="padding-left:600px">{{$posts->links()}}</div>
  <!-- Footer -->

  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://www.nasa.gov/"> www.nasa.gov</a>
  </div>
 
 






@endsection