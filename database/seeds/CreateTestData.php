<?php

use App\Student;
use App\Faculty;
use App\FacultySubject;
use App\StudentSubject;
use App\StudentFaculty;
use Illuminate\Database\Seeder;

class CreateTestData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$faker = Faker\Factory::create();
    	
    	/**
    	 * academic institution
    	 */
    	factory(Member::class, 'institution', 5)
    		->create()
    		->each(function($member) use($faker) {
    			Address::create([
		            'type_id' => 1,
		            'member_id' => $member->id,
		            'country_code' => 'IND', 
		            'state_code' => CsiChapter::find($member->csi_chapter_id)->state->state_code,
		            'address_line_1' => $faker->streetAddress,
		            'city' => State::filterByStateCode(CsiChapter::find($member->csi_chapter_id)->state->state_code)->first()->name,
		            'pincode' => 110052
		        ]);
    			$this->command->info('address done!');
		        Phone::create([
		            'member_id' => $member->id,
		            'std_code' => 011,
		            'landline' => 47028209,
		            'country_code' => 91,
		            'mobile' => 1234567890,
		        ]);
    			$this->command->info('phone done!');

				$institution = Institution::create([
					'member_id' => $member->id, 
					'membership_type_id' => 1, 
					'salutation_id' => 1, 
					'name' => $faker->company, 
					'head_name' => $faker->name, 
					'head_designation' => $faker->word, 
					'email' => $faker->email, 
					'mobile' => 1234567890
				]);

    			$this->command->info('institution done!');
				AcademicMember::create([
		        	'id' => $institution->id,
		        	'institution_type_id' => 2
		    	]);
    			$this->command->info('academic done!');

		        $head = PaymentHead::getHead(1, 1)->first();

		        $payment = Payment::create([
                    'paid_for' => $member->id, 
                    'payment_head_id' => $head->id, 
                    'service_id' => 1
                ]);
    			$this->command->info('payment done!'.$member->id);

		        $narration = Narration::create([ 
                    'payer_id' => $member->id, 
                    'mode' => 1, 
                    'transaction_number' => str_random(12), 
                    'bank' => 'sbi', 
                    'branch' => 'kamla nagar', 
		            'date_of_payment' => $faker->date('d/m/Y'), 
		            'drafted_amount' => $head->amount, 
		            'proof' => '6.jpg'
		        ]);
    			$this->command->info('narration done!');

		        Journal::create([
	                'payment_id' => $payment->id,
	                'narration_id' => $narration->id,
					'paid_amount' => $head->amount, 
	            ]);
    			$this->command->info('Journal done!');
			                
			    RequestService::create([
	                'service_id' => Service::getServiceIDByType('membership'), 
	                'payment_id' => $payment->id,
	                'member_id'  => $member->id
	            ]);
    			$this->command->info('request done!');
    		});
		
		/**
		 * non academic institution
		 */
		factory(Member::class, 'institution', 5)
    		->create()
    		->each(function($member) use($faker) {
    			Address::create([
		            'type_id' => 1,
		            'member_id' => $member->id,
		            'country_code' => 'IND', 
		            'state_code' => CsiChapter::find($member->csi_chapter_id)->state->state_code,
		            'address_line_1' => $faker->streetAddress,
		            'city' => State::filterByStateCode(CsiChapter::find($member->csi_chapter_id)->state->state_code)->first()->name,
		            'pincode' => 110052
		        ]);
    			$this->command->info('address done!');
		        Phone::create([
		            'member_id' => $member->id,
		            'std_code' => 011,
		            'landline' => 47028209,
		            'country_code' => 91,
		            'mobile' => 1234567890,
		        ]);
    			$this->command->info('phone done!');

				$institution = Institution::create([
					'member_id' => $member->id, 
					'membership_type_id' => 2, 
					'salutation_id' => 1, 
					'name' => $faker->company, 
					'head_name' => $faker->name, 
					'head_designation' => $faker->word, 
					'email' => $faker->email, 
					'mobile' => 1234567890
				]);

    			$this->command->info('institution done!');

		        $head = PaymentHead::getHead(9, 1)->first();

		        $payment = Payment::create([
                    'paid_for' => $member->id, 
                    'payment_head_id' => $head->id, 
                    'service_id' => 1
                ]);
    			$this->command->info('payment done!'.$member->id);

		        $narration = Narration::create([ 
                    'payer_id' => $member->id, 
                    'mode' => 1, 
                    'transaction_number' => str_random(12), 
                    'bank' => 'sbi', 
                    'branch' => 'kamla nagar', 
		            'date_of_payment' => $faker->date('d/m/Y'), 
		            'drafted_amount' => $head->amount, 
		            'proof' => '6.jpg'
		        ]);
    			$this->command->info('narration done!');

		        Journal::create([
	                'payment_id' => $payment->id,
	                'narration_id' => $narration->id,
					'paid_amount' => $head->amount, 
	            ]);
    			$this->command->info('Journal done!');
			                
			    RequestService::create([
	                'service_id' => Service::getServiceIDByType('membership'), 
	                'payment_id' => $payment->id,
	                'member_id'  => $member->id
	            ]);
    			$this->command->info('request done!');
    		});
		/**
		 * professional individual
		 */
		factory(Member::class, 'individual', 5)
    		->create()
    		->each(function($member) use($faker) {
    			Address::create([
		            'type_id' => 1,
		            'member_id' => $member->id,
		            'country_code' => 'IND', 
		            'state_code' => CsiChapter::find($member->csi_chapter_id)->state->state_code,
		            'address_line_1' => $faker->streetAddress,
		            'city' => State::filterByStateCode(CsiChapter::find($member->csi_chapter_id)->state->state_code)->first()->name,
		            'pincode' => 110052
		        ]);
    			$this->command->info('address done!');
		        Phone::create([
		            'member_id' => $member->id,
		            'std_code' => 011,
		            'landline' => 47028209,
		            'country_code' => 91,
		            'mobile' => 1234567890,
		        ]);
    			$this->command->info('phone done!');

				$individual = Individual::create([
	                'member_id' => $member->id, 
	                'membership_type_id' => 4, 
	                'salutation_id' => $faker->randomElement(range(1, 5)), 
	                'first_name' => $faker->firstName,
	                'middle_name' => $faker->word,
	                'last_name' => $faker->lastname,
	                'card_name' => $faker->name,
	                'gender' => $faker->randomElement(['m','f']),
	                'dob' => $faker->date('d/m/Y')
	            ]);

    			$this->command->info('individual done!');
				$professional = ProfessionalMember::create([
	                'id' => $individual->id,
	                'organisation' => $faker->company,
	                'designation' => $faker->word
	            ]);
    			$this->command->info('professional done!');

		        $head = PaymentHead::getHead(17, 1)->first();

		        $payment = Payment::create([
                    'paid_for' => $member->id, 
                    'payment_head_id' => $head->id, 
                    'service_id' => 1
                ]);
    			$this->command->info('payment done!'.$member->id);

		        $narration = Narration::create([ 
                    'payer_id' => $member->id, 
                    'mode' => 1, 
                    'transaction_number' => str_random(12), 
                    'bank' => 'sbi', 
                    'branch' => 'kamla nagar', 
		            'date_of_payment' => $faker->date('d/m/Y'), 
		            'drafted_amount' => $head->amount, 
		            'proof' => '6.jpg'
		        ]);
    			$this->command->info('narration done!');

		        Journal::create([
	                'payment_id' => $payment->id,
	                'narration_id' => $narration->id,
					'paid_amount' => $head->amount, 
	            ]);
    			$this->command->info('Journal done!');
			                
			    RequestService::create([
	                'service_id' => Service::getServiceIDByType('membership'), 
	                'payment_id' => $payment->id,
	                'member_id'  => $member->id
	            ]);
    			$this->command->info('request done!');
    		});

			/**
			 * academic individual
			 */
			factory(Member::class, 'individual', 5)
    		->create()
    		->each(function($member) use($faker) {
    			Address::create([
		            'type_id' => 1,
		            'member_id' => $member->id,
		            'country_code' => 'IND', 
		            'state_code' => CsiChapter::find($member->csi_chapter_id)->state->state_code,
		            'address_line_1' => $faker->streetAddress,
		            'city' => State::filterByStateCode(CsiChapter::find($member->csi_chapter_id)->state->state_code)->first()->name,
		            'pincode' => 110052
		        ]);
    			$this->command->info('address done!');
		        Phone::create([
		            'member_id' => $member->id,
		            'std_code' => 011,
		            'landline' => 47028209,
		            'country_code' => 91,
		            'mobile' => 1234567890,
		        ]);
    			$this->command->info('phone done!');

				$individual = Individual::create([
	                'member_id' => $member->id, 
	                'membership_type_id' => 3, 
	                'salutation_id' => $faker->randomElement(range(1, 5)), 
	                'first_name' => $faker->firstName,
	                'middle_name' => $faker->word,
	                'last_name' => $faker->lastname,
	                'card_name' => $faker->name,
	                'gender' => $faker->randomElement(['m','f']),
	                'dob' => $faker->date('d/m/Y')
	            ]);

    			$this->command->info('individual done!');
                $student_details = StudentMember::create([
                    'id'                => $individual->id,
                    'student_branch_id' => 1,
                    'college_name'      => $faker->company,
                    'course_name'       => $faker->word,
                    'course_branch'     => $faker->word,
                    'course_duration'   => 3
                ]);
    			$this->command->info('student done!');

		        $head = PaymentHead::getHead(21, 1)->first();

		        $payment = Payment::create([
                    'paid_for' => $member->id, 
                    'payment_head_id' => $head->id, 
                    'service_id' => 1
                ]);
    			$this->command->info('payment done!'.$member->id);

		        $narration = Narration::create([ 
                    'payer_id' => $member->id, 
                    'mode' => 1, 
                    'transaction_number' => str_random(12), 
                    'bank' => 'sbi', 
                    'branch' => 'kamla nagar', 
		            'date_of_payment' => $faker->date('d/m/Y'), 
		            'drafted_amount' => $head->amount, 
		            'proof' => '6.jpg'
		        ]);
    			$this->command->info('narration done!');

		        Journal::create([
	                'payment_id' => $payment->id,
	                'narration_id' => $narration->id,
					'paid_amount' => $head->amount, 
	            ]);
    			$this->command->info('Journal done!');
			                
			    RequestService::create([
	                'service_id' => Service::getServiceIDByType('membership'), 
	                'payment_id' => $payment->id,
	                'member_id'  => $member->id
	            ]);
    			$this->command->info('request done!');
    		});
        
    }
}
