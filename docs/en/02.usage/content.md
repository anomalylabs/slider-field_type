## Usage[](#usage)

This section will show you how to use the field type via API and in the view layer.

</div>

<div class="section">

### Setting Values[](#usage/setting-values)

You can set the value by using a single value with the slider limits:

    $entry->example = 10;

For range enabled sliders you can set the value with a comma separated value:

    $entry->example = 10,20

</div>

<div class="section">

### Basic Output[](#usage/basic-output)

This field type returns the value as stored in the database by default.

For non-ranges this will be a single value. For range enabled sliders the values are separated with a comma.

    $entry->example; // 10,20 or 10

</div>

<div class="section">

### Presenter Output[](#usage/presenter-output)

This section will show you how to use the decorated value provided by the `\Anomaly\SliderFieldType\SliderFieldTypePresenter` class.

</div>

<div class="section">

#### SliderFieldTypePresenter::top()[](#usage/presenter-output/sliderfieldtypepresenter-top)

The `top` method returns the top end value for range enabled sliders.

###### Returns: `integer`

###### Example

    $decorated->example->top(); // 20

###### Twig

    {{ decorated.example.top() }} // 20

</div>

<div class="section">

#### SliderFieldTypePresenter::bottom()[](#usage/presenter-output/sliderfieldtypepresenter-bottom)

The `bottom` method returns the bottom end value for range enabled sliders.

###### Returns: `integer`

###### Example

    $decorated->example->bottom(); // 10

###### Twig

    {{ decorated.example.bottom() }} // 10

</div>

<div class="section">

#### SliderFieldTypePresenter::values()[](#usage/presenter-output/sliderfieldtypepresenter-values)

The `values` method returns the bottom and top end values in an array for range enabled sliders.

###### Returns: `array`

###### Example

    $decorated->example->values()[0];

###### Twig

    {{ decorated.example.values()|first }}

