<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loan;


class loansController extends Controller
	{
		function apply( Request $request )
			{
				if ( ! $this->doesUserExist( $request->username, $request->secret ) )
					{
						return;
					}

				// First we will create put model object which we have imported on Line 6
				$loans = new Loan();

				// To store data in DB Syntax ( $modal_object->db_columns_name = $request->field_name )
				$loans->status = 1;
				$loans->user_id = 1;
				$loans->loan_amt = $request->amount;
				$loans->loan_tenor = $request->tenor;

				$result = $loans->save();

				if ( $result )
					{
						return [ $this->finalResponse( 'success', 'Data saved!', 'Loan confirmed.' ) ];
					}
				else
					{
						return [ $this->finalResponse( 'error', 'Unable to save!', 'Loan application denied.' ) ];
					}
			}
	}
