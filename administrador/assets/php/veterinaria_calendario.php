<?php

        

        if ( $mysqli->connect_errno )
        {
            die( $mysqli->mysqli_connect_error() );
        }

        $result = $mysqli->query('SELECT * FROM calendario');

        if( !$result )
            die( $mysqli->error );

        $events = array();

        while($row = $result->fetch_assoc())
        {
            $start_date = new DateTime($row['fecha_inicio']);
            $end_date = new DateTime($row['fecha_fin']);
            $day = $start_date->format('j');

            $events[$day][] = array(
                'start_hour' => $start_date->format('G:i a'),
                'end_hour' => $end_date->format('G:i a'),
                'team_code' => $row['cod_equipo'],
                'description' => $row['descripcion']
            );
        }

        $datetime = new DateTime();

        // mes en texto
        $txt_months = array(
            'Enero', 'Febrero', 'Marzo ',
            'Abril', 'Mayo', 'Junio',
            'Julio', 'Agosto', 'septiembre',
            'Octubre', 'Noviembre', 'Diciembre'
        );

        $month_txt = $txt_months[$datetime->format('n')-1];

        // ultimo dia del mes
        $month_days = date('j', strtotime("last day of"));


        echo date('d-m-Y');
        echo '<h1>' . $month_txt . '</h1>';


        foreach(range(1, $month_days) as $day)
        {
            $marked = false;
            $events_list = array();

            foreach($events as $event_day => $event)
            {
                // si el dia del evento coincide lo marcamos y guardamos la informacion
                if($event_day == $day)
                {
                    $marked = true;
                    $events_list = $event;
                    break;
                }
            }

            echo '
            <div class="day' . ($marked ? ' marked' : '') . '">
                <strong class="day-number">' . $day . '</strong>
                <div class="events"><ul>';


                    foreach($events_list as $event)
                    {
                        echo '<li>
                            <div>
                                <strong><center><h5>Cita</h5></center></strong>
                            </div>

                            <div>
                                <strong><center><h5>Asignada</h5></center></strong>
                            </div>
                        </li>';
                    }

                echo '</ul></div>
            </div>';
        }
        ?>