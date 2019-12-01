<div class="ui modal add-transaction-modal">
    <div class="header">New Transaction</div>
    <div class="content">
        <form class="ui form add-transaction-form" action="{{ route('transaction.store') }}" method="POST">
            @csrf
            @component('components.input_text', $amount)
            @endcomponent

            @component('components.input_textarea', $description)
            @endcomponent

            @component('components.input_combobox', $categories)
            @endcomponent
        </form>
    </div>
    <div class="actions">
        <div class="ui black deny button">Cancel</div>
        <div class="ui positive right labeled icon button save-transaction-btn">Save<i class="checkmark icon"></i></div>
    </div>
</div>
