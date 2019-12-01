<div class="transactions cards">
    @foreach($transactions as $transaction)
        <div class="ui card transaction">
            <div class="image">
                <img src="{{ url('https://source.unsplash.com/300x150/?cartoon') }}" alt="random-image">
            </div>
            <div class="content">
                <div class="header">{{ $transaction['amount'] }}</div>
                <div class="description">{{ $transaction['description'] }}</div>
            </div>
            <div class="ui two bottom attached buttons">
                <div class="ui button"><i class="add icon"></i>Delete</div>
                <div class="ui primary button"><i class="play icon"></i>Detail</div>
            </div>
        </div>
    @endforeach
</div>

