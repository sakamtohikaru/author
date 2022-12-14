@extends('layouts.default')
<style>
  th{
    background-color: #289ADC;
    color: while;
    padding: 5px 40px;
  }
  tr:nth-child(odd) td{
    background-color: #FFFFFF;
  }
  td{
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
  td table tbody tr td{
    background-color: #EEEEEE !important;
  }
    tr:nth-child(odd) td table tr td{
    background-color: #FFFFFF !important;
  }

</style>
@section('title', 'author.index.blade.php')
@section('content')
<table>
  <tr>
    <th>Author</th>
    <th>Book</th>
  </tr>
  @foreach ($authors as $author)
  <tr>
    <td>
      {{$author->getDetail()}}
    </td>
    <td>
      @if ($author->books != null)
      <table width="100%">
        @foreach($author->books as $book)
        <tr>
          <td>{{$book->getTitle()}}</td>
        </tr>
        @endforeach
      </table>
      @endif
    </td>
  </tr>
  @endforeach
</table>
@endsection