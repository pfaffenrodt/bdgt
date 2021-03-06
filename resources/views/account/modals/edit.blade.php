@component('partials.modals.form', [
	'formAction' => route('accounts.update', $account->id),
	'method' => 'PUT',
	'title' => trans('labels.accounts.modals.edit.title'),
	'dismissLabel' => trans('labels.accounts.modals.edit.close_button'),
	'submitLabel' => trans('labels.accounts.modals.edit.save_button')
])
	<div class="form-row">
		<label class="form-row__label">{{ trans('labels.accounts.properties.name') }}</label>
		<div class="form-row__input">
			<input type="text" class="input-text" name="name" value="{{ $account->name }}" required>
		</div>
	</div>
	<div class="form-row">
		<label class="form-row__label">{{ trans('labels.accounts.properties.balance') }}</label>
		<div class="form-row__input input-addon--start">
			<span class="input-addon">$</span>
			<input type="number" class="input-text" name="balance" step="0.01" min="0" max="10000000" value="{{ $account->balance }}" required>
		</div>
	</div>
	<div class="form-row">
		<label class="form-row__label">{{ trans('labels.accounts.properties.interest') }}</label>
		<div class="form-row__input input-addon--end">
			<input type="number" class="input-text" name="interest" step="0.01" min="0" max="100" value="{{ $account->interest }}" required>
			<span class="input-addon">%</span>
		</div>
	</div>
	<div class="form-row">
		<label class="form-row__label">{{ trans('labels.accounts.properties.date_opened') }}</label>
		<div class="form-row__input">
			<input-datepicker name="date_opened" value="{{ $account->date_opened }}" required></input-datepicker>
		</div>
	</div>
@endcomponent
