<?php $col_span = 0; ?>
@foreach($prices as $price)
    <div class="table_title">{{ $price['title'] }}</div>
    <table>
        <tr>
            @foreach($price['header'] as $header)
                <th>{{ $header }}</th>
            @endforeach
        </tr>
        @foreach($price['data'] as $row)
            <?php $col_span = count($row); ?>
            <tr>
                @foreach($row as $key => $value)
                    @if($key == 0)
                        <th>{{ $value }}</th>
                    @else
                        <td>{{ $value }}</td>
                    @endif                    
                @endforeach
            </tr>
        @endforeach                   
        <tr>
            <td style="width: 20%"></td>
            <td colspan="{{ $col_span }}" style="text-align: left;">
                Ghi chú:
                <ul>
                    @foreach($price['note'] as $note)
                        <li>
                            {{ $note }}
                        </li>
                    @endforeach                    
                </ul>
            </td>
        </tr>                        
    </table>
@endforeach