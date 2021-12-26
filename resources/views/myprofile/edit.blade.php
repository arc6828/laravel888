<h1>Profile : {{ $profile->id }}</h1>
<h1>Profile 2: {{ $profile2["id"] }}</h1>
<div>
    <strong>Name : </strong>
    <input value="{{ $profile->name }}" />
    <input value="{{ $profile2['name'] }}" />
</div>
<div>
    <strong>Last Name : </strong>
    <input value="{{ $profile->lastname }}" />
</div>
<div>{{ $others }}</div>
<div><button type="submit">Save</button></div>