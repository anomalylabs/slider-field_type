## Introduction[](#introduction)

`anomaly.field_type.slider`

The slider field type provides a range slider input that allows users to select a value between a range of values.


### Configuration[](#introduction/configuration)

Below is the full configuration available with defaults values:

    "example" => [
        "type"   => "anomaly.field_type.slider",
        "config" => [
            "min"           => 0,
            "max"           => 10,
            "step"          => 1,
            "range"         => null,
            "unit"          => null,
            "default_value" => null,
        ],
    ],

###### Configuration

<table class="table table-bordered table-striped">

<thead>

<tr>

<th>Key</th>

<th>Example</th>

<th>Description</th>

</tr>

</thead>

<tbody>

<tr>

<td>

min

</td>

<td>

-100

</td>

<td>

The minumum value selectable.

</td>

</tr>

<tr>

<td>

max

</td>

<td>

100

</td>

<td>

The maximum value selectable.

</td>

</tr>

<tr>

<td>

step

</td>

<td>

5

</td>

<td>

The interval between selectable values.

</td>

</tr>

<tr>

<td>

range

</td>

<td>

true

</td>

<td>

The range mode. Valid options are `false`, `true`, `min`, and `max`.

</td>

</tr>

<tr>

<td>

unit

</td>

<td>

Units

</td>

<td>

The unit label.

</td>

</tr>

<tr>

<td>

default_value

</td>

<td>

50,75

</td>

<td>

The default value.

</td>

</tr>

</tbody>

</table>


## Usage[](#usage)

This section will show you how to use the field type via API and in the view layer.


### Setting Values[](#usage/setting-values)

You can set the value by using a single value with the slider limits:

    $entry->example = 10;

For range enabled sliders you can set the value with a comma separated value:

    $entry->example = 10,20


### Basic Output[](#usage/basic-output)

This field type returns the value as stored in the database by default.

For non-ranges this will be a single value. For range enabled sliders the values are separated with a comma.

    $entry->example; // 10,20 or 10


### Presenter Output[](#usage/presenter-output)

This section will show you how to use the decorated value provided by the `\Anomaly\SliderFieldType\SliderFieldTypePresenter` class.


#### SliderFieldTypePresenter::top()[](#usage/presenter-output/sliderfieldtypepresenter-top)

The `top` method returns the top end value for range enabled sliders.

###### Returns: `integer`

###### Example

    $decorated->example->top(); // 20

###### Twig

    {{ decorated.example.top() }} // 20


#### SliderFieldTypePresenter::bottom()[](#usage/presenter-output/sliderfieldtypepresenter-bottom)

The `bottom` method returns the bottom end value for range enabled sliders.

###### Returns: `integer`

###### Example

    $decorated->example->bottom(); // 10

###### Twig

    {{ decorated.example.bottom() }} // 10


#### SliderFieldTypePresenter::values()[](#usage/presenter-output/sliderfieldtypepresenter-values)

The `values` method returns the bottom and top end values in an array for range enabled sliders.

###### Returns: `array`

###### Example

    $decorated->example->values()[0];

###### Twig

    {{ decorated.example.values()|first }}
