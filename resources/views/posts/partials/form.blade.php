<div  class="p-2">
    <label for="title">Titel</label>
    <input  id="title" type="text" name="title"  value="{{ old('title', optional($post ?? null)->title)}}" class="w-full h-10 px-3 mb-2 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" placeholder="Regular input"/>
  </div>
@error('title')
    <div class="alert -alert-danger">{{ $message }}</div>
@enderror
<div  class="p-2">
    <label for="content">Content</label>
    <textarea id="content" type="text" name="content" class="w-full h-16 px-3 py-2 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline">
        {{ old('content',optional($post ?? null)->content)}}
    </textarea>
    
</div>
    @if ($errors->any())
        <div class="mb-3">
            <ul class="list-groub">
                @foreach ($errors->all() as $error)
                    <li class="list-group-item list-group-danger">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif