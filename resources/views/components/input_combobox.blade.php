<div class="field">
    <label for="{{ $label }}">{{ $label }}</label>
    <input type="hidden" class="combobox multiple">
    <select name="{{ $name }}" title="{{ $title }}" id="" class="ui dropdown">
        @foreach($options as $option)
            <option value="{{ $option['value'] }}">{{ $option['name'] }}</option>
        @endforeach
    </select>
</div>
