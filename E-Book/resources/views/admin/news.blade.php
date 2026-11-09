@extends('admin.sidebar')
@section('admin')

<body>

<div class="container  text-center">
    <form action="{{Route('insertnews')}}" method="post" enctype="multipart/form-data">
@csrf
    <div class="col-md-6 offset-3 mt-4 "><button class="btn btn-primary "><h4 class="text-white">Upload News</h4></button></div>


<div class="row mt-4">
   <div class="col-md-6">
     <input name="nhead" type="text" placeholder="News heading" class="form-control">
   </div>
   <div class="col-md-6">
     <input name="nimage" type="file" placeholder="Insert news image" class="form-control">
   </div>
</div>

<div class="row mt-4">
<div class="col-md-12">
    <textarea
    name="nnews"
    placeholder="Main News description..."
    rows="5"
    class="form-control"
    ></textarea>
</div>
</div>

<div class="row mt-4">
   <div class="col-md-4">
     <label for="ntag">News Tag</label>
   <select  name="ntag" class="form-select">
    <option selected disabled>- Select Tag -</option>
    <option value="active">Active</option>
    <option value="unactive">Un-Active</option>
    <option value="upcoming">Up-Coming</option>
    <option value="latest">Latest</option>
   </select>
   </div>
   <div class="col-md-4">
     <label for="nuid">Uploaded by</label>
      <select name="nuid" class="form-select" required>

    <option value="{{ Auth::id() }}" selected>
        {{ Auth::user()->name ?? 'Admin not-logged in...'}}
    </option>
</select>

   </div>
   <div class="col-md-4">
    <label for="nexp">Expire in</label>
     <input name="nexp" type="datetime-local" class="form-control">
   </div>
</div>

    </form>




{{-- Fetch news --}}
 <div class="text-center mt-5 mb-4">
<button type="submit" class="btn btn-primary mt-5 mb-4">
    <h4 class="text-white">All News</h4>
</button>

  
        <div>
            <span class="an-count">
                <i class="fa-regular fa-newspaper"></i>
                {{ count($news) }} {{ count($news) === 1 ? 'news item' : 'news items' }}
            </span>
        </div>
    </div>
 
    <div class="row g-4">
 
        @forelse ($news as $item)
            <div class="col-12">
                <div class="an-card" data-tag="{{ strtolower($item->tag ?? '') }}" style="animation-delay: {{ $loop->index * 0.07 }}s;">
 
                    {{-- Image + badges --}}
                    <div class="an-image">
                        <img src="{{ $item->image ? asset('storage/newimage/' . $item->image) : asset('user/assets/img/news/09.jpg') }}"
                             alt="{{ $item->title }}">
                        <span class="an-id">#{{ $item->id }}</span>
                        <span class="an-tag">{{ $item->tag }}</span>
                    </div>
 
                    {{-- Body --}}
                    <div class="an-body">
                        <h4 class="an-title text-break">{{ $item->title }}</h4>
                        <p class="an-text">{{ $item->news }}</p>
 
                        <div class="an-meta">
                            <span class="an-chip">
                                <i class="fa-regular fa-hourglass-half"></i>Expires: <strong>{{ $item->dealine }}</strong>
                            </span>
                            <span class="an-chip">
                                <i class="fa-regular fa-user"></i>{{ $item->user->name ?? 'Admin' }}
                            </span>
                        </div>
 
                        <div class="an-actions">
                            <a href="{{ route('admindtl', $item->id) }}" class="an-btn an-btn--view">
                                <i class="fa-regular fa-eye"></i> View
                            </a>
                            <a href="{{ route('edtnews', $item->id) }}" class="an-btn an-btn-edit">
                                <i class="fa-solid fa-pen-to-square"></i> Edit
                            </a>
                            <a href="{{ route('delnews', $item->id) }}" class="an-btn an-btn--delete"
                               onclick="return confirm('Delete this news?')">
                                <i class="fa-solid fa-trash"></i> Delete
                            </a>
                        </div>
                    </div>
 
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="an-empty">
                    <div class="an-tile"><i class="fa-regular fa-newspaper"></i></div>
                    <h5 class="fw-semibold mb-1">No news found</h5>
                    <p class="mb-0">Uploaded news will appear here.</p>
                </div>
            </div>
        @endforelse
 
    </div>
</div>
 


</div>




</body>
</html>
@endsection

