<?php
namespace MohammedAlbalaawi\WeightConversions;

it('can convert kilograms to pounds correctly', function () {
    $pounds = WeightConversionsClass::kilograms(100)->toPounds();
    expect($pounds)->toEqual(220.46);
});
