$x{'PREM'} = 1;
$x{'LINE'} = 2;
$x{'MOHA'} = 3;
$x{'DECK'} = 4;
$x{'BASI'} = 5;
$x{'BROW'} = 6;
$x{'ASTR'} = 7;
$x{'FOIL'} = 8;
$x{'EALE'} = 9;
$x{'EABR'} = 10;
$x{'STAR'} = 11;
$x{'NOTA'} = 12;
$x{'VELL'} = 13;
$x{'BAGA'} = 14;
$x{'BAGO'} = 15;
$x{'BAGH'} = 16;
$x{'BAGB'} = 17;
$x{'CJAC'} = 18;
$x{'PBOX'} = 19;
$x{'HBOX'} = 20;
$x{'VINY'} = 21;
$x{'RIBB'} = 22;
$x{'HTAB'} = 23;
$x{'LOOP'} = 24;
$x{'STIC'} = 25;
$x{'XXXXX'} = 26;
$x{'GRAB'} = 27;
$x{'GIFT'} = 28;


open(sql,">buildprods.sql");
open(src,"products.txt");
$first = <src>;
while(<src>) {
	chop $_;
	$_ =~ s/\n|\r/ /g;
	$_ =~ s/\'/\\\'/g;
	$_ =~ s/  / /g;
	($Item, $Cat, $Label, $Type, $InchWidth, $InchHeight, $InchDepth, $MetricWidth, $MetricHeight, $MetricDepth, $Density, $Color, $Material, $Description, $PieceWeight, $UnitQty, $Price, $rest) = split(/\t/, $_, 18);
	print sql "INSERT INTO products (id, description, label, \`type\`, inchwidth, inchheight, inchdepth, metricwidth, metricheight, metricdepth, density, color, material, pieceweight, unitqty, price, created_at, updated_at, category_id) VALUES (\'$Item\', \'$Description\', \'$Label\', \'$Type\', \'$InchWidth\', \'$InchHeight\', \'$InchDepth\', \'$MetricWidth\', \'$MetricHeight\', \'$MetricDepth\', \'$Density\', \'$Color\', \'$Material\', \'$PieceWeight\', \'$UnitQty\', \'$Price\', NOW(), NOW(), \'$x{$Cat}\');\n";
}
close(src);
close(sql);
