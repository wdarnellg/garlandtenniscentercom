<?php

/* @galleries/shortcode/style.twig */
class __TwigTemplate_3a415419ab75e2fee53bd11abcf6914073d638c08d478bb538cc492a7f64b35f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    // line 1
    public function getprop($_prop = null, $_value = null)
    {
        $context = $this->env->mergeGlobals(array(
            "prop" => $_prop,
            "value" => $_value,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_escape_filter($this->env, (isset($context["prop"]) ? $context["prop"] : null), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo ";";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 2
    public function getobject($_values = null)
    {
        $context = $this->env->mergeGlobals(array(
            "values" => $_values,
        ));

        $blocks = array();

        ob_start();
        try {
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : null));
            foreach ($context['_seq'] as $context["prop"] => $context["value"]) {
                echo twig_escape_filter($this->env, (isset($context["prop"]) ? $context["prop"] : null), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo ";";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['prop'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@galleries/shortcode/style.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 2,  21 => 1,  2287 => 4,  2275 => 3,  2267 => 1675,  2263 => 1674,  2257 => 1671,  2253 => 1670,  2247 => 1667,  2243 => 1666,  2237 => 1663,  2233 => 1662,  2228 => 1659,  2217 => 1656,  2208 => 1655,  2203 => 1654,  2201 => 1637,  2196 => 1635,  2193 => 1634,  2189 => 1489,  2179 => 1485,  2170 => 1479,  2166 => 1478,  2161 => 1476,  2152 => 1470,  2148 => 1469,  2143 => 1468,  2138 => 1467,  2135 => 1466,  2131 => 1330,  2128 => 1329,  2119 => 1321,  2115 => 1320,  2108 => 1316,  2102 => 1313,  2099 => 1312,  2096 => 1311,  2091 => 1326,  2089 => 1311,  2083 => 1308,  2079 => 1307,  2072 => 1303,  2066 => 1300,  2062 => 1298,  2059 => 1297,  2048 => 1288,  2044 => 1287,  2040 => 1286,  2036 => 1285,  2032 => 1284,  2025 => 1283,  2021 => 1282,  2017 => 1281,  2013 => 1280,  2009 => 1279,  2005 => 1278,  1997 => 1273,  1988 => 1267,  1981 => 1263,  1970 => 1255,  1966 => 1254,  1961 => 1252,  1957 => 1251,  1949 => 1246,  1940 => 1240,  1933 => 1236,  1924 => 1230,  1917 => 1226,  1908 => 1220,  1901 => 1216,  1892 => 1210,  1885 => 1206,  1876 => 1200,  1869 => 1196,  1860 => 1190,  1853 => 1186,  1847 => 1182,  1845 => 1179,  1840 => 1176,  1837 => 1172,  1835 => 1171,  1831 => 1169,  1828 => 1168,  1819 => 920,  1815 => 919,  1807 => 914,  1801 => 911,  1797 => 909,  1794 => 908,  1789 => 904,  1781 => 899,  1777 => 898,  1770 => 894,  1765 => 892,  1759 => 888,  1749 => 878,  1743 => 875,  1736 => 871,  1731 => 869,  1725 => 865,  1723 => 864,  1719 => 862,  1716 => 858,  1714 => 857,  1710 => 855,  1707 => 854,  1701 => 846,  1698 => 833,  1694 => 830,  1691 => 821,  1687 => 818,  1685 => 817,  1682 => 816,  1675 => 849,  1672 => 816,  1668 => 813,  1665 => 805,  1660 => 801,  1657 => 785,  1653 => 782,  1650 => 774,  1646 => 771,  1643 => 762,  1639 => 759,  1636 => 751,  1632 => 748,  1629 => 740,  1625 => 737,  1622 => 718,  1618 => 715,  1615 => 708,  1611 => 705,  1608 => 698,  1604 => 695,  1601 => 683,  1597 => 680,  1594 => 673,  1590 => 670,  1587 => 655,  1582 => 651,  1579 => 632,  1576 => 631,  1572 => 628,  1569 => 627,  1561 => 621,  1559 => 620,  1555 => 618,  1553 => 617,  1549 => 615,  1547 => 614,  1543 => 612,  1541 => 611,  1537 => 609,  1535 => 608,  1526 => 602,  1520 => 601,  1515 => 599,  1509 => 598,  1504 => 596,  1498 => 595,  1491 => 591,  1481 => 584,  1474 => 580,  1464 => 573,  1458 => 572,  1454 => 571,  1448 => 570,  1441 => 566,  1434 => 561,  1431 => 560,  1423 => 554,  1421 => 552,  1417 => 550,  1415 => 549,  1411 => 547,  1409 => 545,  1406 => 544,  1403 => 528,  1401 => 517,  1397 => 515,  1394 => 514,  1390 => 484,  1387 => 483,  1380 => 485,  1378 => 483,  1374 => 481,  1372 => 465,  1368 => 463,  1366 => 462,  1361 => 459,  1358 => 455,  1356 => 454,  1352 => 452,  1349 => 451,  1342 => 446,  1334 => 441,  1330 => 440,  1326 => 439,  1321 => 437,  1317 => 435,  1314 => 434,  1307 => 430,  1303 => 429,  1297 => 426,  1293 => 424,  1288 => 421,  1286 => 412,  1282 => 410,  1280 => 401,  1276 => 399,  1274 => 389,  1270 => 387,  1267 => 386,  1265 => 385,  1261 => 383,  1259 => 382,  1255 => 380,  1253 => 371,  1249 => 369,  1247 => 360,  1243 => 358,  1241 => 348,  1237 => 346,  1234 => 345,  1232 => 344,  1228 => 342,  1226 => 341,  1222 => 339,  1220 => 330,  1216 => 328,  1214 => 327,  1210 => 325,  1208 => 320,  1204 => 318,  1201 => 317,  1199 => 316,  1194 => 313,  1192 => 309,  1188 => 307,  1185 => 306,  1181 => 300,  1178 => 299,  1173 => 295,  1170 => 290,  1167 => 289,  1160 => 301,  1158 => 299,  1154 => 297,  1152 => 289,  1148 => 287,  1146 => 286,  1142 => 284,  1139 => 277,  1136 => 265,  1132 => 262,  1130 => 260,  1126 => 258,  1124 => 256,  1119 => 253,  1117 => 251,  1114 => 250,  1110 => 243,  1108 => 242,  1104 => 240,  1101 => 233,  1097 => 230,  1095 => 228,  1091 => 226,  1089 => 224,  1084 => 221,  1082 => 220,  1078 => 218,  1076 => 216,  1073 => 215,  1069 => 211,  1067 => 202,  1060 => 198,  1051 => 192,  1047 => 191,  1040 => 186,  1038 => 185,  1034 => 183,  1031 => 182,  1027 => 1634,  1017 => 1627,  1012 => 1625,  1006 => 1622,  1002 => 1621,  998 => 1620,  992 => 1617,  987 => 1616,  985 => 1615,  978 => 1611,  971 => 1607,  946 => 1584,  936 => 1580,  930 => 1577,  920 => 1576,  910 => 1575,  907 => 1574,  903 => 1573,  899 => 1571,  897 => 1499,  891 => 1496,  886 => 1494,  880 => 1490,  878 => 1466,  873 => 1464,  870 => 1463,  864 => 1462,  857 => 1458,  846 => 1453,  840 => 1450,  836 => 1449,  831 => 1448,  824 => 1444,  815 => 1438,  810 => 1436,  805 => 1434,  790 => 1423,  783 => 1419,  777 => 1416,  765 => 1408,  762 => 1407,  758 => 1406,  753 => 1404,  747 => 1400,  737 => 1396,  732 => 1394,  726 => 1393,  720 => 1392,  717 => 1391,  713 => 1390,  710 => 1389,  707 => 1388,  704 => 1387,  702 => 1386,  699 => 1385,  697 => 1376,  691 => 1373,  686 => 1371,  678 => 1366,  671 => 1362,  661 => 1355,  656 => 1353,  650 => 1350,  645 => 1348,  640 => 1346,  633 => 1342,  629 => 1341,  622 => 1337,  616 => 1334,  611 => 1332,  608 => 1331,  606 => 1329,  603 => 1328,  601 => 1297,  597 => 1295,  595 => 1168,  588 => 1163,  585 => 1156,  581 => 1153,  578 => 1145,  573 => 1141,  570 => 1133,  566 => 1130,  563 => 1122,  559 => 1119,  556 => 1111,  552 => 1108,  549 => 1094,  545 => 1091,  542 => 1083,  538 => 1080,  535 => 1073,  531 => 1070,  528 => 1063,  524 => 1060,  521 => 1052,  517 => 1049,  514 => 1041,  510 => 1038,  507 => 1030,  503 => 1027,  500 => 1019,  496 => 1016,  493 => 1008,  489 => 1005,  486 => 993,  482 => 990,  479 => 970,  476 => 968,  473 => 967,  470 => 966,  467 => 959,  464 => 930,  458 => 925,  456 => 908,  452 => 906,  450 => 854,  447 => 853,  445 => 627,  442 => 626,  440 => 560,  437 => 559,  435 => 514,  427 => 508,  425 => 507,  413 => 498,  409 => 497,  401 => 494,  396 => 492,  391 => 489,  389 => 451,  386 => 450,  384 => 306,  381 => 305,  379 => 182,  373 => 179,  369 => 178,  365 => 177,  361 => 176,  357 => 175,  353 => 174,  350 => 173,  347 => 172,  344 => 171,  341 => 170,  333 => 165,  321 => 158,  313 => 157,  307 => 153,  300 => 149,  296 => 147,  283 => 137,  274 => 136,  271 => 135,  268 => 134,  265 => 133,  262 => 132,  260 => 131,  257 => 130,  254 => 129,  251 => 128,  248 => 127,  245 => 126,  243 => 125,  240 => 124,  237 => 123,  234 => 122,  232 => 121,  229 => 120,  226 => 119,  223 => 118,  221 => 117,  218 => 116,  216 => 115,  209 => 110,  203 => 108,  201 => 107,  198 => 106,  196 => 105,  188 => 100,  178 => 93,  173 => 91,  164 => 85,  159 => 83,  150 => 77,  145 => 75,  141 => 74,  138 => 73,  132 => 62,  129 => 61,  126 => 60,  123 => 59,  118 => 55,  113 => 56,  111 => 55,  105 => 52,  97 => 47,  89 => 42,  81 => 37,  70 => 31,  63 => 29,  55 => 27,  52 => 8,  49 => 7,);
    }
}