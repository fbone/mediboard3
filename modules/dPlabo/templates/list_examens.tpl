{{* $Id: list_examens.tpl 6136 2009-04-21 12:31:36Z phenxdesign $
  -- Parameters
  $examens : List of exams to display
  $examen_id : Selected exam
*}}

    <th colspan="4" class="title">Liste des analyses</th>
 </tr>
 
  <tr>
    <th>R�f�rences</th>
  
        {{$curr_examen->libelle}}
    <td>{{$curr_examen->min}} &ndash; {{$curr_examen->max}}</td>