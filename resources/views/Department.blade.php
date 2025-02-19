@include("nav")

<div class="department-container">
    @foreach ($departments as $department)
    <a href="{{ url('/departments/applyform/' . $department->id) }}" class="department-card">
        <div class="h-48 overflow-hidden">
            <img src="{{ asset('storage/' . $department->image) }}" alt="{{ $department->name }} Department">
        </div>
        <h3 class="text-lg font-medium mt-2">{{ $department->department }} - {{ $department->name }}</h3>
    </a>
    @endforeach
</div>


<style>
    .department-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.department-card {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    text-align: center;
    padding: 15px;
}

.department-card img {
    width: 100%;
    height: 200px; /* Fixed height for consistency */
    object-fit: cover; /* Ensures images fit nicely */
}

</style>
<!-- Customers Also Purchased Section -->

@include("footer")
