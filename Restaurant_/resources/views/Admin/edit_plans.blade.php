@extends('Admin/layout')
@section('container')
    @foreach ($plans as $plan)
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Subscription Plan</h4>
                    <br>
                    <form class="forms-sample" action="{{ asset('/plans-edit-process/' . $plan->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" name="name" value="{{ $plan->name }}" class="form-control text"
                                id="exampleInputName1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Description</label>
                            <input type="text" name="description" value="{{ $plan->description }}" class="form-control text"
                                id="exampleInputName1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Price</label>
                            <input type="number" name="price" value="{{ $plan->price }}" class="form-control text"
                                id="exampleInputPassword4">
                        </div>
                        <div class="form-group features-container">
                            <label for="exampleInputName1">Features</label>
                            <input type="text" name="features[]" placeholder="Enter feature 1"
                                class="form-control features-input text" id="exampleInputName1">
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




                        <button type="submit" class="btn btn-primary me-2">Update</button>
                        <button class="btn btn-dark">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection()

<style>
    .alert {
        padding: 20px;
        background-color: #f44336;
        color: white;
    }

    .success {
        padding: 20px;
        background-color: #4BB543;
        color: white;
    }

    .text {
        color: white !important;
        background-color: #333;
    }

    .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    .closebtn:hover {
        color: black;
    }
</style>
