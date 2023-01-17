
<table class="table-auto">
  <thead>
    <tr>
      <th>Song</th>
      <th>Artist</th>
      <th>Year</th>
    </tr>
  </thead>
  <tbody>
    
    <?php
    foreach ($punches as $punch):?>
    <tr>
          <td>{{$punch['date']}}</td>
          <td>{{$punch['morning_in']}}</td>
          <td>{{$punch['morning_out']}}</td>
          <td>{{$punch['afternoon_in']}}</td>
          <td>{{$punch['afternoon_out']}}</td>
          
        </tr>
 <?php endforeach;?>
  </tbody>
</table>
