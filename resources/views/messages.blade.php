@if(session(isset($prefix) ? $prefix . '-error' : 'error'))
    <div class="p-5 bg-red-300 mb-10 rounded">
        {{session(isset($prefix) ? $prefix . '-error' : 'error')}}
    </div>
@endif
@if(session(isset($prefix) ? $prefix . '-success' : 'success'))
    <div class="p-5 bg-green-300 mb-10 rounded">
        {{session(isset($prefix) ? $prefix . '-success' : 'success')}}
    </div>
@endif
