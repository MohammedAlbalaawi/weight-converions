<?php
namespace MohammedAlbalaawi\WeightConversions;

use MohammedAlbalaawi\WeightConversions\WeightConversionsClass;

it('can convert kilograms to pounds correctly', function () {
    $pounds = WeightConversionsClass::kilograms(100)->toPounds();
    expect($pounds)->toEqual(220.46);
});
