{{-- resources/views/faqs/faqs.blade.php --}}

@extends('layout.layout')
@section('title', 'FAQs')

@section('content')
<div class="container my-4">
    <h1>FAQs</h1>

    @if(auth()->check() && auth()->user()->isAdmin)
        <button onclick="toggleCreate()" class="btn btn-primary mb-4">Add New FAQ</button>
    @endif

    @foreach ($faqs as $faq)
        <div class="faq-item" id="faq-{{ $faq->id }}">
            <!-- Display Section -->
            <div id="faqDisplay-{{ $faq->id }}">
                <h2>{{ $faq->question }}</h2>
                <p>{{ $faq->answer }}</p>
                @if(auth()->check() && auth()->user()->isAdmin)
                    <button onclick="toggleEdit({{ $faq->id }})" class="btn btn-info">Edit</button>
                    <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                @endif
            </div>

            <!-- Edit Section -->
            <div id="faqEdit-{{ $faq->id }}" style="display: none;">
                <form action="{{ route('faqs.update', $faq->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="question-{{ $faq->id }}">Question:</label>
                        <input type="text" class="form-control" id="question-{{ $faq->id }}" name="question" value="{{ $faq->question }}">
                    </div>
                    <div class="form-group">
                        <label for="answer-{{ $faq->id }}">Answer:</label>
                        <textarea class="form-control" id="answer-{{ $faq->id }}" name="answer" rows="3">{{ $faq->answer }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update FAQ</button>
                    <button type="button" onclick="toggleEdit({{ $faq->id }})" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    @endforeach

    <!-- Create New FAQ Form -->
    @if(auth()->check() && auth()->user()->isAdmin)
        <div id="faqCreate" style="display: none;">
            <form action="{{ route('faqs.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="newQuestion">Question:</label>
                    <input type="text" class="form-control" id="newQuestion" name="question" required>
                </div>
                <div class="form-group">
                    <label for="newAnswer">Answer:</label>
                    <textarea class="form-control" id="newAnswer" name="answer" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" onclick="toggleCreate()" class="btn btn-secondary">Cancel</button>
            </form>
        </div>
    @endif
</div>
@endsection

@section('scripts')
<script>
    function toggleEdit(faqId) {
        var display = document.getElementById('faqDisplay-' + faqId);
        var edit = document.getElementById('faqEdit-' + faqId);
        if (display.style.display === 'none') {
            display.style.display = 'block';
            edit.style.display = 'none';
        } else {
            display.style.display = 'none';
            edit.style.display = 'block';
        }
    }

    function toggleCreate() {
        var createForm = document.getElementById('faqCreate');
        createForm.style.display = createForm.style.display === 'none' ? 'block' : 'none';
    }
</script>
@endsection
