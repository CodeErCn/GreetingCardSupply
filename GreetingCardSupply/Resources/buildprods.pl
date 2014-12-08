
open(sql,">buildprods.sql");
open(src,"products.txt");
$first = <src>;
while(<src>) {
	chop $_;
	$_ =~ s/\n|\r/ /g;
	$_ =~ s/\'/\`\'/g;
	$_ =~ s/  / /g;
	($Item, $Cat, $Label, $Type, $InchWidth, $InchHeight, $InchDepth, $MetricWidth, $MetricHeight, $MetricDepth, $Density, $Color, $Material, $Description, $PieceWeight, $UnitQty, $Price,$rest) = split(/\t/, $_, 18);
	print sql "INSERT INTO products (id, cat, label, type, inchwidth, inchheight, inchdepth, metricwidth, metricheight, metricdepth, density, color, material, description, pieceweight, unitqty, price, created_at, updated_at), VALUES (\'$Item\', \'$Cat\', \'$Label\', \'$Type\', \'$InchWidth\', \'$InchHeight\', \'$InchDepth\', \'$MetricWidth\', \'$MetricHeight\', \'$MetricDepth\', \'$Density\', \'$Color\', \'$Material\', \'$Description\', \'$PieceWeight\', \'$UnitQty\', \'$Price\', NOW(), NOW());\n";
}
close(src);
close(sql);
