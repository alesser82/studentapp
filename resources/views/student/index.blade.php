@extends('template')

@section('main')
    <div class="container my-3">
    <h3>Student's List</h3>
    <ul>
    <!-- <?php
    if (!empty($students)) {
        foreach ($students as $key => $student) {
    ?>
        <li><?= $student; ?></li>
    <?php
        }
    }
    ?> -->
    @if (!empty($students))
        @foreach($students as $student)
            <li>{{ $student }}</li>
        @endforeach
    @else
        <li>Student's empty</li>
    @endif
    </ul>
    </div>
@stop