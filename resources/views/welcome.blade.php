@extends('layouts.app')

@section('content')
    <div class="jumbotron p-5 mb-4 bg-light rounded-3">
        <div class="container py-5">
            <h1 class="display-5 fw-bold">
                Welcome to your new project management system
            </h1>

            <p class="col-md-8 fs-4">Our system will help you organize, monitor, and optimize your projects all in one place.
            </p>
            <a href="#" class="btn btn-primary btn-lg" type="button">Learn more</a>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <h2 class="mb-4">Why choose our project management system?</h2>
            <ul>
                <li>Organize your projects and tasks efficiently.</li>
                <li>Easily monitor the progress of your projects.</li>
                <li>Optimize resource planning and management.</li>
                <li>Collaborate with your team in one place.</li>
            </ul>

            <h3 class="mt-5 mb-4">Here's what our users say</h3>
            <blockquote>
                "The project management system has revolutionized the way we work. We can now manage all our projects
                effectively and efficiently."
                <footer>- John Doe</footer>
            </blockquote>

            <div class="my-5">
                <a href="#" class="btn btn-primary btn-lg">Start your free trial now</a>
            </div>
        </div>
    </div>
@endsection
