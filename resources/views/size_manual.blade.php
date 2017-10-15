@extends('cherrylayout.app')

@section('title', 'CART | '.config('app.name'))

@section('navigation')
    @include('cherrylayout.navigator')
@endsection


@section('lookbook')
    <div class="container">
        <div class="row" style="padding: 25px;">
            <h2 class="text-center">РУКОВОДСТВО ПО РАЗМЕРАМ</h2><br/>
            <table class="table size-guide">
                <thead>
                <tr><th colspan="7" style="background-color: rgba(121, 242, 212, 0.898);">КУРТКИ, РУБАШКИ, ПИДЖАКИ, ПАЛЬТО, ФУТБОЛКИ, ТОЛСТОВКИ, РУБАШКИ-ПОЛО...</th></tr>
                <tr style="background-color: rgb(168, 169, 239)">
                    <th>РАЗМЕР</th>
                    <th>XS</th>
                    <th>S</th>
                    <th>M</th>
                    <th>L</th>
                    <th>XL</th>
                    <th>XXL</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Обхват груди (см)</td>
                    <td>87</td>
                    <td>93</td>
                    <td>99</td>
                    <td>105</td>
                    <td>111</td>
                    <td>117</td>
                </tr>
                <tr>
                    <td>Обхват талии (см)</td>
                    <td>67</td>
                    <td>73</td>
                    <td>79</td>
                    <td>85</td>
                    <td>91</td>
                    <td>97</td>
                </tr>
                <tr>
                    <td>Обхват бедер (см)</td>
                    <td>87</td>
                    <td>93</td>
                    <td>99</td>
                    <td>105</td>
                    <td>111</td>
                    <td>117</td>
                </tr>
                </tbody>
            </table>
            {{----}}
            <table class="table size-guide">
                <thead>
                <tr><th colspan="8" style="background-color: rgba(121, 242, 212, 0.898);">БРЮКИ, ДЖИНСЫ, ШОРТЫ-БЕРМУДЫ...</th></tr>
                <tr style="background-color: rgb(168, 169, 239)">
                    <th>РАЗМЕР</th>
                    <th>36</th>
                    <th>38</th>
                    <th>40</th>
                    <th>42</th>
                    <th>44</th>
                    <th>46</th>
                    <th>48</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Высокая посадка (см)</td>
                    <td>74</td>
                    <td>78</td>
                    <td>82</td>
                    <td>86</td>
                    <td>90</td>
                    <td>94</td>
                    <td>98</td>
                </tr>
                <tr>
                    <td>Обхват бедер (см)</td>
                    <td>91</td>
                    <td>95</td>
                    <td>99</td>
                    <td>103</td>
                    <td>107</td>
                    <td>111</td>
                    <td>115</td>
                </tr>
                </tbody>
            </table>
            {{----}}
            <table class="table size-guide">
                <thead>
                <tr><th colspan="7" style="background-color: rgba(121, 242, 212, 0.898);">БРЮКИ, ШОРТЫ...</th></tr>
                <tr style="background-color: rgb(168, 169, 239)">
                    <th>РАЗМЕР</th>
                    <th>XS</th>
                    <th>S</th>
                    <th>M</th>
                    <th>L</th>
                    <th>XL</th>
                    <th>XXL</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Низкая посадка (см)</td>
                    <td>70</td>
                    <td>76</td>
                    <td>82</td>
                    <td>88</td>
                    <td>94</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>Обхват бедер (см)</td>
                    <td>87</td>
                    <td>93</td>
                    <td>99</td>
                    <td>105</td>
                    <td>111</td>
                    <td>117</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection


@section('footer')
    @include('cherrylayout.footer2')
@endsection