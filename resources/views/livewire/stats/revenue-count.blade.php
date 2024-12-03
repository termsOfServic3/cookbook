<x-stat-layout name="Orders" :stat="(new NumberFormatter('en_US', NumberFormatter::CURRENCY))->formatCurrency($revenue / 100, 'USD')"/>
