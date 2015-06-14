@extends('layout')

@section('content')
    <h3 class="page-header">Many to many ordering</h3>

    @foreach ($posts as $post)
        <h4>{{ $post->title }}</h4>

        <h6>Tags</h6>
        <table class="table table-striped table-hover" style="margin-bottom: 5em;">
            <tbody class="sortable" data-entityname="posts">
            @foreach ($post->tags as $tag)
                <tr data-itemId="{{ $tag->id }}" data-parentId="{{ $post->id }}">
                    <td class="sortable-handle"><span class="glyphicon glyphicon-sort"></span></td>
                    <td class="id-column">{{ $tag->id }}</td>
                    <td>{{ $tag->title }}</td>
                    <td class="grid-actions">
                        <a href="#" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="#" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-remove"></span></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endforeach
@endsection