@extends('layout')

@section('content')
    <h3 class="page-header">Many to many polymorphic ordering (inversed)</h3>

    @foreach($authors as $author)
        <h3>{{ $author->name }}</h3>

        <h5>Albums</h5>

        <table class="table table-striped table-hover" style="margin-bottom: 5em;">
            <tbody class="sortable" data-entityname="album">
            @foreach ($author->albums as $album)
                <tr data-itemId="{{ $album->id }}" data-parentId="{{ $author->id }}">
                    <td class="sortable-handle"><span class="glyphicon glyphicon-sort"></span></td>
                    <td class="id-column">{{ $album->id }}</td>
                    <td>{{ $album->title }}</td>
                    <td class="grid-actions">
                        <a href="#" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="#" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-remove"></span></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <h5>Videos</h5>

        <table class="table table-striped table-hover" style="margin-bottom: 5em;">
            <tbody class="sortable" data-entityname="video">
            @foreach ($author->videos as $video)
                <tr data-itemId="{{ $video->id }}" data-parentId="{{ $author->id }}">
                    <td class="sortable-handle"><span class="glyphicon glyphicon-sort"></span></td>
                    <td class="id-column">{{ $video->id }}</td>
                    <td>{{ $video->title }}</td>
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