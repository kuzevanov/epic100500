<?php

$xml = '<recipe name="хлеб" preptime="5" cooktime="180">
  <title>Простой хлеб</title>
  <composition>
    <ingredient amount="3" unit="стакан">Мука</ingredient>
    <ingredient amount="0.25" unit="грамм">Дрожжи</ingredient>
    <ingredient amount="1.5" unit="стакан">Тёплая вода</ingredient>
    <ingredient amount="1" unit="чайная ложка">Соль</ingredient>
  </composition>
  <instructions>
    <step>Смешать все ингредиенты и тщательно замесить.</step>
    <step>Закрыть тканью и оставить на один час в тёплом помещении.</step>
    <!-- <step>Почитать вчерашнюю газету.</step> - это сомнительный шаг... -->
    <step>Замесить ещё раз, положить на противень и поставить в духовку.</step>
  </instructions>
</recipe>
';

$recipe = new SimpleXMLElement($xml);
var_dump($recipe);
echo $recipe->composition->ingredient[2] . '<br />';

foreach ($recipe->instructions->step as $step) {
    echo $step . '<br />';
}