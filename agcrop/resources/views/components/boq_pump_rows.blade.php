<tr>
    <th></th>
    <th></th>
    <th>{{ $title }}</th>
    <th></th>
    <th></th>
    <th></th>
    <th>-</th>
    <th></th>
    <th></th>
</tr>
{{ \App\Services\CalculationService::generateRow($pump, json_decode($data), 'feeder_incomer', $hideZeroRow) }}
{{ \App\Services\CalculationService::generateRow($pump, json_decode($data), 'spreader_fuse', $hideZeroRow) }}
{{ \App\Services\CalculationService::generateRow($pump, json_decode($data), 'rotary_handle', $hideZeroRow) }}
{{ \App\Services\CalculationService::generateRow($pump, json_decode($data), 'contractor_main', $hideZeroRow) }}
{{ \App\Services\CalculationService::generateRow($pump, json_decode($data), 'contractor_delta', $hideZeroRow) }}
{{ \App\Services\CalculationService::generateRow($pump, json_decode($data), 'contractor_star', $hideZeroRow) }}
{{ \App\Services\CalculationService::generateRow($pump, json_decode($data), 'contractor_olr', $hideZeroRow) }}
{{ \App\Services\CalculationService::generateRow($pump, json_decode($data), 'timer', $hideZeroRow) }}
{{ \App\Services\CalculationService::generateRow($pump, json_decode($data), 'control_mcb', $hideZeroRow) }}
{{ \App\Services\CalculationService::generateRow($pump, json_decode($data), 'two_no_two_nc', $hideZeroRow) }}
{{ \App\Services\CalculationService::generateRow($pump, json_decode($data), 'one_no_one_nc', $hideZeroRow) }}
{{ \App\Services\CalculationService::generateRow($pump, json_decode($data), 'one_nc', $hideZeroRow) }}
{{ \App\Services\CalculationService::generateRow($pump, json_decode($data), 'first_left', $hideZeroRow) }}
{{ \App\Services\CalculationService::generateRow($pump, json_decode($data), 'indicator', $hideZeroRow) }}
{{ \App\Services\CalculationService::generateRow($pump, json_decode($data), 'selector_switch', $hideZeroRow) }}
{{ \App\Services\CalculationService::generateRow($pump, json_decode($data), 'push_button_one', $hideZeroRow) }}
{{ \App\Services\CalculationService::generateRow($pump, json_decode($data), 'push_button_two', $hideZeroRow) }}
{{ \App\Services\CalculationService::generateRow($pump, json_decode($data), 'push_button_three', $hideZeroRow) }}
{{ \App\Services\CalculationService::generateRow($pump, json_decode($data), 'push_button_four', $hideZeroRow) }}
