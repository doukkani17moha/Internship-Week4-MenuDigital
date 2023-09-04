@extends('founder.layout')
@section('content')
@foreach ($plans as $plan)
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Update patient</h5>
            <div class="card">
                <form action="{{ asset('/plans-edit-process/' . $plan->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name"
                                name="name" value="{{ $plan->name }}">
                            <div class="form-text">Take your time, please don't make a mistake.</div>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control" id="description" aria-describedby="description"
                                name="description" value="{{ $plan->description }}">
                            <div class="form-text">Take your time, please don't make a mistake.</div>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" aria-describedby="price"
                                name="price" value="{{ $plan->price }}">
                            <div class="form-text">Take your time, please don't make a mistake.</div>
                        </div>
                        <div class="mb-3 features-container">
                            <label for="features" class="form-label">Features</label>
                            <input type="text" class="form-control features-input text" id="features[]" aria-describedby="emailHelp"
                                name="features[]" placeholder="Enter feature 1" value="">
                                <br>
                        </div>
                        <script>
                            document.addEventListener('DOMContentLoaded', () => {
                                const featuresContainer = document.querySelector('.features-container');
                                let featureCounter = 2; // Initialize feature counter
                                const addFeatureInput = () => {
                                    const newInput = document.createElement('input');
                                    newInput.type = 'text';
                                    newInput.name = 'features[]';
                                    newInput.className = 'form-control features-input text';
                                    newInput.placeholder = `Enter Feature ${featureCounter}`;
                                    featuresContainer.appendChild(newInput);
                                    // Add a line break element
                                    const lineBreak = document.createElement('br');
                                    featuresContainer.appendChild(lineBreak);

                                    newInput.focus(); // Set focus on the new input field
                                    featureCounter++; // Increment feature counter
                                };

                                featuresContainer.addEventListener('keydown', event => {
                                    if (event.key === 'Enter' && event.target.classList.contains('features-input')) {
                                        event.preventDefault();
                                        addFeatureInput();
                                    }
                                });

                                // Remove the initial input field added on page load
                                const initialInput = featuresContainer.querySelector('.features-input');

                            });
                        </script>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
@endsection()
