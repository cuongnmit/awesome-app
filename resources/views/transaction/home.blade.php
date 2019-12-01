@extends('layouts.app')

@section('content')
    @includeIf('components.range')
    <div class="container">
        <button class="button primary ui add-transaction-btn">New Transaction</button>
        <div class="ui divider"></div>
        @includeIf('transaction.add')
        @includeIf('transaction.list')
    </div>
@endsection
