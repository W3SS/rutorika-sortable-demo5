@extends('layout')

@section('content')
    <h3 class="page-header">Many to many polymorphic ordering</h3>


    <h3>Videos</h3>
    @foreach ($videos as $video)
        <h4>{{ $video->title }}</h4>

        <h6>Authors</h6>
        <table class="table table-striped table-hover" style="margin-bottom: 5em;">
            <tbody class="sortable" data-entityname="video">
            @foreach ($video->authors as $author)
                <tr data-itemId="{{ $author->id }}" data-parentId="{{ $video->id }}">
                    <td class="sortable-handle"><span class="glyphicon glyphicon-sort"></span></td>
                    <td class="id-column">{{ $author->id }}</td>
                    <td>{{ $author->name }}</td>
                    <td class="grid-actions">
                        <a href="#" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="#" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-remove"></span></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endforeach



    <h3>Albums</h3>
    @foreach ($albums as $album)
        <h4>{{ $album->title }}</h4>

        <h6>Authors</h6>
        <table class="table table-striped table-hover" style="margin-bottom: 5em;">
            <tbody class="sortable" data-entityname="album">
            @foreach ($album->authors as $author)
                <tr data-itemId="{{ $author->id }}" data-parentId="{{ $album->id }}">
                    <td class="sortable-handle"><span class="glyphicon glyphicon-sort"></span></td>
                    <td class="id-column">{{ $author->id }}</td>
                    <td>{{ $author->name }}</td>
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