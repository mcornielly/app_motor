@extends('main')

@section('content')
	<template v-if="menu==0">
		<example-component></example-component>
	</template>
	<template v-if="menu==1">
		<h1>Clientes</h1>
		<example-component></example-component>
	</template>
	<template v-if="menu==2">
		<h2>Direcciones</h2>
		<example-component></example-component>
	</template>
	<template v-if="menu==3">
		<h2>Vehiculo</h2>
		<example-component></example-component>
	</template>
	<template v-if="menu==4">
		<h2>Cotizaciones</h2>
		<example-component></example-component>
	</template>
	<template v-if="menu==5">
		<h2>Ordenes</h2>	
		<example-component></example-component>
	</template>
	<template v-if="menu==6">
		<h2>Artículos</h2>	
		<example-component></example-component>
	</template>
	<template v-if="menu==7">
		<h2>Artículos</h2>	
		<example-component></example-component>
	</template>
	<template v-if="menu==8">
		<h2>Usuarios</h2>	
		<example-component></example-component>
	</template>
	<template v-if="menu==9">
		<h2>Roles</h2>	
		<example-component></example-component>
	</template>

@endsection